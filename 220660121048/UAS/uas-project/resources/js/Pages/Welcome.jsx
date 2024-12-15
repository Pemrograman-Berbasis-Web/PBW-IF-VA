import { Footer } from "@/Components/Footer";
import { Hero } from "@/Components/Hero";
import { Navbar } from "@/Components/Navbar";

import { Head, usePage } from "@inertiajs/react";
import Dashboard from "./Posts/Index";

export default function Welcome(props) {
    const { posts } = usePage().props;
    return (
        <>
            <Head title="Welcome" />
            <div className="bg-gray-50 text-black/50 dark:bg-black dark:text-black/50">
                <img
                    id="background"
                    className="absolute -left-20 top-0 max-w-[877px]"
                    src="https://laravel.com/assets/img/welcome/background.svg"
                />
                <div className="relative flex min-h-screen flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                    <div className="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                        <Navbar />
                        <Hero />
                        <Dashboard posts={posts} />
                        <Footer />
                    </div>
                </div>
            </div>
        </>
    );
}
