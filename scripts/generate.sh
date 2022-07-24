#!/bin/sh

set -e

## CHANGELOG
#
# 20220608.0
# - updating script to be able to accept overloading for paths and components portions of swagger schema
#
# 20220531.0
# - Initial incarnation

_jq_bin_path="$(which jq)"
_oag_bin_path="$(which openapi-generator)"
_oag_config_filepath="$(pwd)/openapi-generator-config.yml"

_spec_source="https://stage.paragonsolutions.com/api/swagger/v2/swagger.json"
_spec_filename="swagger.json"
_spec_filename_updated="swagger-updated.json"
_spec_local_dirpath="$(pwd)/spec"
_spec_local_filepath_original="${_spec_local_dirpath}/${_spec_filename}"
_spec_local_filepath_updated="${_spec_local_dirpath}/${_spec_filename_updated}"

_spec_root_fixes="${_spec_local_dirpath}/root-fixes.json"
_spec_definitions_fixes="${_spec_local_dirpath}/definitions-fixes.json"
_spec_paths_fixes="${_spec_local_dirpath}/paths-fixes.json"

root_fixes() {
  cat "${_spec_root_fixes}"
}

definitions_fixes() {
  cat "${_spec_definitions_fixes}"
}

paths_fixes() {
  cat "${_spec_paths_fixes}"
}

update_specfile() {
  "${_jq_bin_path}" --raw-output \
    --argjson paths_fixes "$(paths_fixes)" \
    --argjson definitions_fixes "$(definitions_fixes)" \
    --argjson root_fixes "$(root_fixes)" \
    --slurp '$paths_fixes * $definitions_fixes * .[0] * $root_fixes' \
    "${_spec_local_filepath_original}" > "${_spec_local_filepath_updated}"
}

generate_client() {
  "${_oag_bin_path}" generate \
    --config "${_oag_config_filepath}" \
    --output "$(pwd)" \
    --input-spec "${_spec_local_filepath_updated}" \
    --skip-validate-spec
}

final_steps() {
  composer update
  git add --update
  git add '*.php'
  git add 'docs/*.md'
  git status
}

if [ -f "${_jq_bin_path}" ]; then
  echo "jq found at ${_jq_bin_path}"
else
  echo "jq not found"
  exit 1
fi

if [ -d "${_spec_local_dirpath}" ]; then
  echo "Working directory OK"
else
  echo "Working directory is invalid ($(pwd))"
  exit 1
fi

if [ -f "${_spec_local_filepath_original}" ]; then
  echo "Spec file found at ${_spec_local_filepath_original}"
else
  echo "Spec file not found."
  wget "${_spec_source}" -P "${_spec_local_dirpath}"
fi

echo "Merging server list with source spec..."

update_specfile

echo "Updated specfile created:"
echo "${_spec_local_filepath_updated}"

echo "Running openapi-generator..."

generate_client

echo "Client generation completed."

final_steps

echo "Fin."