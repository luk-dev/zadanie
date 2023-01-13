/**
 * Build configuration for bud.js
 * @param {import('@roots/bud').Bud} bud
 */
export default async bud => {
  /**
   * The bud instance
   */
  bud
    /**
     * Set the project source directory
     */
    .setPath(`@src`, `app`)

    /**
     * Set the application entrypoints
     * These paths are expressed relative to the `@src` directory
     */
    .entry({
      app: [`app.js`, `scss/app.scss`], // [`./sources/app.js`, `./sources/app.css`]
    })

    bud.hooks.on('extension.@roots/bud-postcss.options', (options) => ({
      ...options,
      syntax: 'postcss-scss',
    }))
    /**
     * Copy static assets from `sources/static` to `dist/static`
     */
    .assets({
      from: bud.path(`@src/static`),
      to: bud.path(`@dist/static`),
    })
}