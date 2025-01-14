import React from "react";

import { Head, useForm, Link } from "@inertiajs/react";

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
    const { data, setData, errors, post } = useForm({
        nama: "",
        alamat: "",
        jurusan: "",
    });

    function handleSubmit(e) {
        e.preventDefault();
        post(route("posts.store"));
    }

    return (
        <div className="pt-32 relative bg-gray-50 text-black/50 dark:bg-black dark:text-black/50">
            <img
                id="background"
                className="absolute -left-20 top-0 max-w-[877px]"
                src="https://laravel.com/assets/img/welcome/background.svg"
            />
            <div className="max-w-7xl min-h-screen relative z-50 mx-5 rounded-md sm:px-6 lg:px-8">
                <div className="bg-white overflow-hidden shadow-sm rounded-lg">
                    <div className="p-6 bg-white border-b rounded-md border-gray-200">
                        <div className="flex items-center justify-between mb-6">
                            <Link
                                className="px-6 py-2 text-white bg-blue-500 rounded-md focus:outline-none"
                                href={route("posts.index")}
                            >
                                Kembali
                            </Link>
                        </div>

                        <form name="createForm" onSubmit={handleSubmit}>
                            <div className="flex flex-col">
                                <div className="mb-4">
                                    <label className="">Nama</label>

                                    <input
                                        type="text"
                                        className="w-full px-4 py-2"
                                        label="Nama"
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
                                        {errors.body}
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
                                    className="px-6 py-2 font-bold text-white bg-indigo-600 rounded"
                                >
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    );
}
