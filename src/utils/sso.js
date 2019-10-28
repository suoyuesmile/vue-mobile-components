// import axios from 'axios'
// import Cookies from 'js-cookie'

// const SSO_DOMAIN =
//   process.env.NODE_ENV === 'testing'
//     ? 'test-sso-domain'
//     : process.env.VUE_APP_SSO_DOMAIN

// const isAuthorized = () => !!Cookies.get('token')

// const getToken = () => Cookies.get('token')

// const removeToken = () => Cookies.remove('token')

// const checkToken = () => axios.get(`${SSO_DOMAIN}/api/public/sso/check_jwt`)

// const ssoLogin = () => {
//   const origin = encodeURIComponent(location.href)
//   window.location.href = `${SSO_DOMAIN}/api/public/sso/login?pageUrl=${origin}`
// }

// const ssoLogout = () => {
//   axios.get(`${SSO_DOMAIN}/api/public/sso/logout`).then(
//     () => {
//       removeToken()
//       ssoLogin()
//     },
//     () => {
//       removeToken()
//       ssoLogin()
//     }
//   )
// }

// const setTplCookie = () => {
//   axios
//     .get(`${SSO_DOMAIN}/api/public/sso/tmp_cookie`, {
//       withCredentials: true
//     })
//     .then(
//       res => {
//         Cookies.set('token', res.data.token)
//         window.location.reload()
//       },
//       () => {
//         ssoLogin()
//       }
//     )
// }

// const getStaffInfo = () =>
//   axios.get(`${SSO_DOMAIN}/api/public/sso/get_userinfo`)

// export {
//   isAuthorized,
//   getToken,
//   getStaffInfo,
//   setTplCookie,
//   ssoLogout,
//   ssoLogin,
//   removeToken,
//   checkToken
// }
