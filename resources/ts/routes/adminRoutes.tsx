import { lazy } from 'react';

const LoginPage = lazy(() => import('@/pages/Login/LoginPage'));

export const adminRoutes = [
    { path: '/admin/login', element: <LoginPage /> },
];
