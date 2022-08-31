import vue from "@vitejs/plugin-vue";
import path from "path";
import { fileURLToPath, URL } from "url";
import { defineConfig } from "vite";

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue()],
  base: "",
  publicDir: "static",
  build: {
    outDir: "public"
  },
  resolve: {
    alias: {
      "@": fileURLToPath(new URL("./src", import.meta.url)),
      "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap")
    }
  }
});
