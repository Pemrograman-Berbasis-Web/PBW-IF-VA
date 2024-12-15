import { Head, Link, usePage } from "@inertiajs/react";
import { Inertia } from "@inertiajs/inertia";
export default function Dashboard(props) {
    const { posts } = usePage().props;

    function destroy(e) {
        e.preventDefault();
        if (confirm("Apa anda yakin untuk mengahapus post?")) {
            const postId = e.currentTarget.id; // ID post
            Inertia.delete(route("posts.destroy", postId));
        }
    }

    return (
        <div className="py-12">
            <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div className="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                    <div className="p-6 dark:bg-indigo-600 rounded-md bg-white border-b border-gray-200">
                        <div className="flex items-center justify-between mb-6">
                            <Link
                                className="px-6 py-2 text-black dark:bg-white bg-indigo-600 rounded-md focus:outline-none"
                                href={route("posts.create")}
                            >
                                Daftar
                            </Link>
                        </div>
                        <div className="overflow-x-auto">
                            <table className="table-auto overflow-x-scroll w-full">
                                <thead>
                                    <tr className="bg-gray-100">
                                        <th className="px-4 py-2">No.</th>

                                        <th className="px-4 py-2">Nama</th>

                                        <th className="px-4 py-2">Alamat</th>

                                        <th className="px-4 py-2">
                                            Minat Jurusan
                                        </th>

                                        <th className="px-4 py-2">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    {posts.map(
                                        ({ id, nama, alamat, jurusan }) => (
                                            <tr key={id} className="text-white">
                                                <td className="border px-4 py-2">
                                                    {id}
                                                </td>

                                                <td className="border px-4 py-2">
                                                    {nama}
                                                </td>

                                                <td className="border px-4 py-2">
                                                    {alamat}
                                                </td>
                                                <td className="border px-4 py-2">
                                                    {jurusan}
                                                </td>

                                                <td className="border px-4 py-5 sm:flex sm:justify-center sm:items-center block">
                                                    <div className="flex justify-center items-center space-x-2">
                                                        <Link
                                                            tabIndex="1"
                                                            className="px-4 py-2 text-sm text-white bg-blue-500 rounded"
                                                            href={route(
                                                                "posts.edit",
                                                                id
                                                            )}
                                                        >
                                                            Edit
                                                        </Link>

                                                        <button
                                                            onClick={destroy}
                                                            id={id}
                                                            tabIndex="-1"
                                                            type="button"
                                                            className="px-4 py-2 text-sm text-white bg-red-500 rounded"
                                                        >
                                                            Delete
                                                        </button>
                                                    </div>
                                                </td>

                                                {/* <td className="border px-4 py-2">
                                                    <Link
                                                        tabIndex="1"
                                                        className="px-4 py-2 text-sm text-white bg-blue-500 rounded"
                                                        href={route(
                                                            "posts.edit",
                                                            id
                                                        )}
                                                    >
                                                        Edit
                                                    </Link>

                                                    <button
                                                        onClick={destroy}
                                                        id={id}
                                                        tabIndex="-1"
                                                        type="button"
                                                        className="mx-1 px-4 py-2 text-sm text-white bg-red-500 rounded"
                                                    >
                                                        Delete
                                                    </button>
                                                </td> */}
                                            </tr>
                                        )
                                    )}

                                    {posts.length === 0 && (
                                        <tr>
                                            <td
                                                className="px-6 py-4 border-t"
                                                colSpan="4"
                                            >
                                                Tidak ada data ditemukan.
                                            </td>
                                        </tr>
                                    )}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
