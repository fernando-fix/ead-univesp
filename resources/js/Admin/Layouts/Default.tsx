import Footer from "./Footer";
import Header from "./Header";

export default function Default({ children }: { children: React.ReactNode }) {
    return (
        <>
            <Header />
            <main>
                {children}
            </main>
            <Footer />
        </>
    );
}