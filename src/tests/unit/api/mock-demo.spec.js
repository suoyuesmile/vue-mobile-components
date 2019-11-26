jest.mock('./mock')
import { login } from '@/api/user'

describe('测试mock数据', () => {
  it('测试登陆', () => {
    login().then((res) => {
      console.log(res)
    })
  })
})
