import { Link } from "@inertiajs/react";

export default function Home() {
    return (
        <>
            <div className="text-3xl bg-gray-500 p-5">Hello web</div>
            <Link className="block bg-green-400" href="/teachers">Professores</Link>
            <Link className="block bg-blue-400" href="/students">Estudantes</Link>
            <Link className="block bg-red-400" href="/admin">Administradores</Link>
            <Link className="block bg-gray-400 mt-4" href={'/login'}>Login</Link>
        </>
    )
}
