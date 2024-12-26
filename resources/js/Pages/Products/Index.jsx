import { Link } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';

export default function Index({ products }) {
    return (
        <AuthenticatedLayout>
            <div className="max-w-4xl mx-auto p-4">
                <h1 className="text-3xl font-bold mb-4 text-center">Product Index</h1>
                <hr className="mb-4" />
                <div>
                    <ul className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        {products.map((product) => (
                            <li key={product.id} className="bg-white shadow-md rounded-lg p-4">
                                <Link href={`/products/${product.id}`}>
                                    <div className="w-full h-32 overflow-hidden rounded-lg mb-4 flex justify-center items-center">
                                        <img src={`/${product.image}`} alt={product.name} className="w-auto h-32 object-cover" />
                                    </div>
                                    <div className="text-lg font-semibold">{product.name}</div>
                                    <div className="text-gray-700">${product.price}</div>
                                </Link>
                            </li>
                        ))}
                    </ul>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
