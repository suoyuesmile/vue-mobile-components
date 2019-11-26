import { genConfig, genConfig2 } from '../../demo/config'

describe('测试快照', () => {
  it('测试config', () => {
    expect(genConfig()).toMatchSnapshot({
      time: expect.any(Date)
    })
  })
  it('测试config2', () => {
    expect(genConfig2()).toMatchSnapshot()
  })
})
