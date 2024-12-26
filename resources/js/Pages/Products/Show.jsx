import { Link } from '@inertiajs/react';

export default function Show({ product }) {
    return (
        <div className="max-w-2xl mx-auto p-4 bg-white shadow-md rounded-lg">
            <img src={`/${product.image}`} alt={product.name} className="w-auto h-64 object-cover rounded-lg mb-4 mx-auto" />
            <h1 className="text-2xl font-bold mb-2">{product.name}</h1>
            <p className="text-gray-700 mb-4">{product.description}</p>
            <p className="text-xl font-semibold mb-4">Price: ${product.price}</p>
            <Link href="/products" className="text-blue-500 hover:underline">Back to All Products</Link>
        </div>
    );
}
