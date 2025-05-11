import { ReactNode } from 'react';

export default function AdminLayout({ children }: { children: ReactNode }) {
    return (
        <div>
            {/* 這裡以後可以放 Sidebar, Topbar 等 Layout 元件 */}
            {children}
        </div>
    );
}
