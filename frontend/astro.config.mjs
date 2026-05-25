import { defineConfig } from 'astro/config';
// CloudPress: WordPress PHP/JS → Astro/TS 자동 변환 (자동 생성)
export default defineConfig({
  output: 'static',
  build: { assets: '_assets' },
  site: 'https://cp-45b0c093-wp.choichoi3227.workers.dev',
  trailingSlash: 'ignore',
});
