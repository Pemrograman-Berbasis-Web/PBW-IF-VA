import React from "react";


import { Head, useForm, usePage, Link } from "@inertiajs/react";

const jurusanList = [
    "Teknik Informatika",
    "Sistem Informasi",
    "Teknik Elektro",
    "Manajemen",
    "Akuntansi",
    "Psikologi",
    "Kedokteran",
    "Ilmu Hukum",
];

export default function Dashboard(props) {
    const { post } = usePage().props;

    const { data, setData, put, errors } = useForm({
        nama: post.nama || "",

        alamat: post.alamat || "",
        jurusan: post.jurusan || "",
    });

    function handleSubmit(e) {
        e.preventDefault();

        put(route("posts.update", post.id));
    }

    return (
     
        
        <div className="py-12">
        <Head title="Posts" />
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">
                            <div className="flex items-center justify-between mb-6">
                                <Link
                                    className="px-6 py-2 text-white bg-blue-500 rounded-md focus:outline-none"
                                    href={route("posts.index")}
                                >
                                    Back
                                </Link>
                            </div>

                            <form name="createForm" onSubmit={handleSubmit}>
                                <div className="flex flex-col">
                                    <div className="mb-4">
                                        <label className="">Nama</label>

                                        <input
                                            type="text"
                                            className="w-full px-4 py-2"
                                            label="nama"
                                            name="nama"
                                            value={data.nama}
                                            onChange={(e) =>
                                                setData("nama", e.target.value)
                                            }
                                        />

                                        <span className="text-red-600">
                                            {errors.nama}
                                        </span>
                                    </div>

                                    <div className="mb-4">
                                        <label className="">Alamat</label>

                                        <textarea
                                            type="text"
                                            className="w-full rounded"
                                            label="alamat"
                                            name="alamat"
                                            errors={errors.alamat}
                                            value={data.alamat}
                                            onChange={(e) =>
                                                setData("alamat", e.target.value)
                                            }
                                        />

                                        <span className="text-red-600">
                                            {errors.alamat}
                                        </span>
                                    </div>
                                    <div className="mb-0 block">
                                    <div>
                                        <label htmlFor="jurusan">
                                            Pilih Jurusan:
                                        </label>
                                    </div>
                                    <select
                                        id="jurusan"
                                        className="w-full"
                                        value={data.jurusan}
                                        onChange={(e) =>
                                            setData("jurusan", e.target.value)
                                        }
                                    >
                                        <option value="" disabled>
                                            -- Pilih Jurusan --
                                        </option>
                                        {jurusanList.map((jurusan, index) => (
                                            <option key={index} value={jurusan}>
                                                {jurusan}
                                            </option>
                                        ))}
                                    </select>
                                    {errors.jurusan && (
                                        <span>{errors.jurusan}</span>
                                    )}
                                </div>
                                </div>

                                <div className="mt-10">
                                    <button
                                        type="submit"
                                        className="px-6 py-2 font-bold text-white bg-green-500 rounded"
                                    >
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    );
}
