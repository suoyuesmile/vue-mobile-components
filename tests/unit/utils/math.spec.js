import { add, min } from '@/utils/math'

// beforeAll(() => {
//   console.log('beforeAll 1')
// })
// beforeEach(() => {
//   console.log('beforeEach 1')
// })
describe('测试math方法', () => {
  // beforeAll(() => {
  //   console.log('beforeAll 2')
  // })
  // beforeEach(() => {
  //   console.log('beforeEach 2')
  // })
  // toBe
  it('测试加法', () => {
    expect(add(1, 3)).toBe(4)
  })

  it('测试减法', () => {
    expect(min(2, 1)).toBe(1)
  })
  // toEqual
  it('测试内容', () => {
    expect('demo').toEqual('demo')
  })
  // toBeNull
  it('测试是否为null', () => {
    expect(null).toBeNull()
  })
  // toBeUndefined
  it('测试是否为undefined', () => {
    expect(undefined).toBeUndefined()
  })
  // toBeTruthy
  it('测试是否为真', () => {
    expect(1).toBeTruthy()
  })
  // toBeFalsy
  it('测试是否为假', () => {
    expect(0).toBeFalsy()
    expect(0).not.toBeTruthy()
  })
  // toBeGreaterThen >
  it('测试大于', () => {
    expect(10).toBeGreaterThan(2)
  })
  // toBeLessThan
  it('测试小于', () => {
    expect(3).toBeLessThan(5)
  })
  // toBeGreaterThenOrEqual
  it('测试大于等于', () => {
    expect(2).toBeGreaterThanOrEqual(2)
  })
  // toBeCloseTo
  it('测试相近', () => {
    // expect(0.1 + 0.2).toBe(0.3)
    expect(0.1 + 0.2).toBeCloseTo(0.3)
  })
  // toMatch
  it('测试匹配', () => {
    expect('hello world').toMatch('hello')
  })
  // toContain (set, array)
  it('测试包含', () => {
    expect([1, 2, 3]).toContain(1)
  })
  // toThrow
  const throwNewErrorFunc = () => {
    throw new Error('123')
  }
  it('测试异常', () => {
    expect(throwNewErrorFunc).toThrow()
  })
})
