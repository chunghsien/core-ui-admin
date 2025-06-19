import { lazy } from 'react';

//@core-ui-admin
//const LoginPage = lazy(() => import(/*@vite-ignore*/ '@core-ui-admin/pages/Login/LoginPage'));
const LoginPage = lazy(() => import('../pages/Login/LoginPage'));

export const adminRoutes = [
    { path: '/zh-TW/admin', element: <LoginPage /> },
    //{ path: '/admin/login', element: <LoginPage /> },
];
