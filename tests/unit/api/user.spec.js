import { login } from '@/api/user'

describe('测试用户api是否通过', () => {
  it('测试登陆接口1', (done) => {
    login({}).then((res) => {
      expect(res).toEqual({
        code: '0000',
        data: {}
      })
      done()
    })
  })

  it('测试登陆接口2', () => {
    return expect(login()).resolves.toMatchObject({
      code: '0000',
      data: {}
    })
  })

  // it('测试登陆接口3', () => {
  //   return expect(login()).rejects.toThrow()
  // })

  it('测试登陆接口4', async () => {
    await expect(login()).resolves.toMatchObject({
      code: '0000',
      data: {}
    })
  })

  it('测试登陆接口5', async () => {
    const data = await login()
    expect(data).toEqual({
      code: '0000',
      data: {}
    })
  })
})
