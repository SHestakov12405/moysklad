import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import axios from 'axios';
import {useState, useEffect} from 'react';

export default function Dashboard(props) {

    const [data, setData] = useState([]);
    const handleClick = () => {
        axios
        .get('/api/stores')
        .then((response) => {
            console.log(response);
            setData(response.data.stores);
        })
        .catch((error) => {
            console.log(error);
        });
    }
    
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">You're logged in!</div>
                    </div>
                </div>
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900"><button onClick={()=>{handleClick()}}>Api</button></div>
                    </div>
                </div>
            </div>
            <div>
                {
                    data.map(element => {
                        return element.name
                    })
                }
            </div>
        </AuthenticatedLayout>

    );
}
