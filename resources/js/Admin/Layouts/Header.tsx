import { Link } from "@inertiajs/react";

export default function Header() {
    return (
        <>
            <header>
                <Link href="/logout">Sair</Link>
                <hr />
            </header>
        </>
    );
}