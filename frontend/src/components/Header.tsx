const Header = () => {
  const userName = "Admin User"; // TODO: traer del contexto de Auth

  return (
    <header className="bg-white shadow px-6 py-4 flex justify-between items-center">
      <h1 className="text-xl font-semibold">Dashboard</h1>
      <div>
        👤 {userName}
      </div>
    </header>
  );
};

export default Header;
