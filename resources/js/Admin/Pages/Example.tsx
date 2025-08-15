import { Link } from "@inertiajs/react";

export default function Example() {
    return (
        <>
            <div className="text-3xl bg-red-500 p-5">Hello Admin Example</div>
            <hr />
            <Link href='/'>Voltar</Link>
        </>
    );
}
