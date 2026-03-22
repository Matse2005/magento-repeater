import { defineNuxtConfig } from "nuxt/config";

export default defineNuxtConfig({
  extends: [
    '@vercel/analytics/nuxt/module'
  ],
  site: {
    name: 'Magento Repeater',
  },
})
