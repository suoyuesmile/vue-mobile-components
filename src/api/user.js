import { fetch, post } from '@/utils/http'

// 用户登陆
export const login = (data) => post('/user/login', data)

// 获取用户信息
export const getUserInfo = (data) => fetch('/api/user/info', data)
