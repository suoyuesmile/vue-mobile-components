import { runCallback } from '@/utils/run'

describe('mock', () => {
  it('测试函数是否运行', () => {
    const func = jest.fn()
    runCallback(func)
    runCallback(func)
    expect(func).toBeCalled()
    expect(func.mock.calls.length).toBe(2)
    console.log(func.mock)
  })
})
