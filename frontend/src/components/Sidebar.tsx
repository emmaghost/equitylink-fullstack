import { Link } from "react-router-dom";

const Sidebar = () => {
  return (
    <aside className="w-64 bg-gray-800 text-white h-screen p-4">
      <h2 className="text-2xl font-bold mb-6">Equity Link</h2>
      <nav className="flex flex-col gap-3">
        <Link to="/dashboard" className="hover:bg-gray-700 p-2 rounded">🏠 Dashboard</Link>
        <Link to="/invoices" className="hover:bg-gray-700 p-2 rounded">📑 Facturas</Link>
        <Link to="/users" className="hover:bg-gray-700 p-2 rounded">👥 Usuarios</Link>
      </nav>
    </aside>
  );
};

export default Sidebar;
