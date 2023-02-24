<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use DB;

class AjaxController extends Controller
{
    function index()
    {
     $data = DB::table('products')->paginate(7);
     return view('ajaxPagination', compact('data'));
    }

    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      $data = DB::table('products')->paginate(5);
      return view('divs', compact('data'))->render();
     }
    }
   
public function showEmployee(Request $request)
   {
      if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '') {
                $data = DB::table('products')
                    ->where('id', 'like', '%'.$query.'%')
                    ->orWhere('name', 'like', '%'.$query.'%')
                    ->orWhere('description', 'like', '%'.$query.'%')
                    ->orWhere('price', 'like', '%'.$query.'%')
                    ->orWhere('image', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')
                    ->get();
                    
            } else {
                $data = DB::table('products')
                    ->orderBy('id', 'desc')
                    ->get();
            }
             
            $total_row = $data->count();
            if($total_row > 0){
                foreach($data as $row)
                {
                    $output .= '
                    <tr>
                    <td>'.$row->id.'</td>
                    <td>'.$row->name.'</td>
                    <td>'.$row->description.'</td>
                    <td>'.$row->price.'</td>
                    <td>'.$row->image.'</td>
                    </tr>
                    ';
                }
            } else {
                $output = '
                <tr>
                    <td align="center" colspan="5">No Data Found</td>
                </tr>
                ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
            echo json_encode($data);
        }
    }
}

