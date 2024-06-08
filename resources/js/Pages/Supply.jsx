import axios from 'axios';
import {useState, useEffect} from 'react';



export default function Supply(props) {

    // const [data, setData] = useState([]);
    // const handleClick = () => {
    //     axios
    //     .get('/api/supply')
    //     .then((response) => {
    //         console.log(response);
    //         setData(response.data.supply);
    //     })
    //     .catch((error) => {
    //         console.log(error);
    //     });
    // }
    console.log(props);
    
    return (
        <>
            {/* <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div className="p-6 text-gray-900"><button onClick={()=>{handleClick()}}>Api</button></div>
                </div>
            </div> */}

            <div>
                {
                    props.supply.rows.map(element => {
                        return (
                            <div className="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <h5 className="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Id: {element.name}</h5>
                            </a>
                            <p className="mb-3 font-normal text-gray-700 dark:text-gray-400">Склад: {element.store.name}</p>
                            <a href="#" className="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg className="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                            </div>
                        )
                    })
                }
            </div>  
            

           


        </>
    );
}
