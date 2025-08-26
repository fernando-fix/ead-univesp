import { Link } from "@inertiajs/react";

export default function Home() {
    return (
        <>
            <div className="text-3xl bg-gray-500 p-5">Hello web</div>
            <Link className="block bg-green-400" href="/professor/exemplo">Professores</Link>
            <Link className="block bg-blue-400" href="/aluno/exemplo">Estudantes</Link>
            <Link className="block bg-red-400" href="/admin/exemplo">Administradores</Link>
            <Link className="block bg-gray-400 mt-4" href={'/login'}>Login</Link>
            <Link className="block bg-gray-400 mt-4" href={'/cadastro'}>Cadastro</Link>
        </>
    )
}
