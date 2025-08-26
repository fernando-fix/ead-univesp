import InputText from "@/Shared/Components/Inputs/InputText";
import Default from "@/Web/Layouts/Default";
import { Link } from "@inertiajs/react";
import InputCSRFToken from "@/Shared/Components/Inputs/InputCSRFToken";

export default function Login() {

    return (
        <>
            <Default>
                <div className="container mx-auto h-screen flex items-center text-gray-600 p-2">
                    <div className="w-[425px] mx-auto">
                        <h2 className="text-3xl mb-4 text-center">Cadastro de Estudante</h2>
                        <form action="/cadastro" method="post">

                            {/* CSRF */}
                            <InputCSRFToken />

                            {/* Nome completo */}
                            <InputText type="text" name="name" label="Nome completo" placeholder="Digite seu nome completo" />

                            {/* Email */}
                            <InputText type="email" name="email" label="Email" placeholder="Digite seu email" />

                            {/* Senha */}
                            <InputText type="password" name="password" label="Senha" placeholder="Digite seu email" autoComplete="current-password" />

                            {/* Senha confirmacao */}
                            <InputText type="password" name="password_confirmation" label="Confirmar senha" placeholder="Digite sua senha novamente" autoComplete="current-password" />

                            <div className="flex justify-between gap-2">

                                {/* Login */}
                                <div className="w-1/3">
                                    <Link href="/login" className="block text-center bg-gray-700 hover:bg-gray-600 py-1 rounded-md w-1/1 cursor-pointer text-white">Login</Link>
                                </div>

                                {/* Botão voltar */}
                                <div className="w-1/3">
                                    <Link href="/" className="block text-center bg-gray-700 hover:bg-gray-600 py-1 rounded-md w-1/1 cursor-pointer text-white">Voltar</Link>
                                </div>

                                {/* Botão de login */}
                                <div className="w-1/3">
                                    <button type="submit" className="bg-green-700 hover:bg-green-600 py-1 rounded-md w-1/1 cursor-pointer text-white">Cadastrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </Default>
        </>
    );
}
