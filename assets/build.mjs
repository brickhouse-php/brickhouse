import * as esbuild from 'esbuild'
import tailwindPlugin from 'esbuild-plugin-tailwindcss';

await esbuild.build({
  entryPoints: ['assets/app.ts'],
  bundle: true,
  minify: true,
  outdir: 'public/_build',
  plugins: [
    tailwindPlugin({
      configPath: 'tailwind.config.js'
    }),
  ]
});