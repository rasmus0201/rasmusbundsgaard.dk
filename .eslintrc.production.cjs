/* eslint-env node */
require("@rushstack/eslint-patch/modern-module-resolution");

module.exports = {
  extends: [".eslintrc.cjs"],
  rules: {
    "simple-import-sort/imports": "error",
    "simple-import-sort/exports": "error",
    "no-duplicate-imports": "error",
    "no-restricted-imports": [
      "error",
      {
        patterns: ["../*"]
      }
    ],
    "no-unused-vars": "off",
    "@typescript-eslint/no-unused-vars": ["error"],
    "no-console": "error",
    "no-debugger": "error",
    "vue/no-unused-components": "error",
    "vue/v-on-function-call": ["error", "always"],
    eqeqeq: ["error", "always"],
    "vue/eqeqeq": ["error", "always"]
  }
};
