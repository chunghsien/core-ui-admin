import { BrowserRouter, Routes, Route } from 'react-router-dom';
import { adminRoutes } from './routes/adminRoutes';
import { Suspense } from 'react';
import AdminLayout from './layouts/AdminLayout';

export default function App() {
    return (
        <BrowserRouter>
            <AdminLayout>
                <Suspense fallback={<div>Loading...</div>}>
                    <Routes>
                        {adminRoutes.map((route, idx) => (
                            <Route key={idx} path={route.path} element={route.element} />
                        ))}
                    </Routes>
                </Suspense>
            </AdminLayout>
        </BrowserRouter>
    );
}
