module.exports = {
  publicPath: '',
  outputDir: 'dist',
  assetsDir: 'static',
  filenameHashing: true,
  lintOnSave: true,
  runtimeCompiler: false,
  transpileDependencies: [/\/node_modules\/vue-echarts\//, /\/node_modules\/resize-detector\//],
  productionSourceMap: false,
  devServer: {
    // before: require('./mock'),
    // 单元测试、本地联调情况下，使用代理灰度数据
    proxy: {
      '^/api': {
        target: 'xxx'
      }
    }
  },
  chainWebpack: (config) => {
    config.module
      .rule('pug')
      .test(/\.pug$/)
      .use('pug-html-loader')
      .loader('pug-html-loader')
      .end()
  },
  css: {
    sourceMap: true
  }
}
