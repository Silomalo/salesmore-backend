<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function quotationAPI(Request $request)
    {
        // validate myinput
        try {
            $validator = Validator::make($request->all(), [
                'myinput.name' => 'required',
                'myinput.phone1' => 'required',
                'myinput.details' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'status' => 400,
                    'message' => $request->all(),
                ]);
            }

            // initialize a vector to store the data
            $data = [];
            $total = 0;
            $cart = $request->cart;
            //loop through the cart and save the data to the database
            foreach ($cart as $item) {
                //   append name and amount to data[]
                // concatenate pid, name and amount and append it to data[] as a single entry
                $data[] = $item['pid'] . ": " . $item['name'] . "@ " . $item['cost'];
                $total += $item['cost'] * $item['amount'];
            }
            // stringify data[]
            $data = json_encode($data);
            // $details = $request->myinput['details'];
            $quotation = new Quotation();
            $quotation->name = $request->myinput['name'];
            $quotation->phone1 = $request->myinput['phone1'];
            if (isset($request->myinput['phone3'])) {
                $quotation->phone2 = $request->myinput['phone3'];
            }
            $quotation->city = $request->myinput['location'];
            $quotation->products = $data;
            $quotation->total = $total;
            $quotation->description = $request->myinput['details'];
            $quotation->served = "pending";
            $quotation->save();
            return response()->json([
                'status' => 200,
                'success' => 'Quotation sent successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 400,
                'message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function toggleState(Request $request)
    {
        // search value served from quotation table using request->id
        $served = Quotation::where('id', $request->id)->value('served');
        // dd($served);
        if ($served == "pending") {
            DB::table('quotations')
                ->where('id', $request->id)
                ->update([
                    'served' => "served",
                ]);
        } else {
            DB::table('quotations')
                ->where('id', $request->id)
                ->update([
                    'served' => "pending",
                ]);
        }

        return redirect()->back()->with('success', 'Quotation status updated successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function show(Quotation $quotation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function edit(Quotation $quotation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quotation $quotation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quotation $quotation, Request $request)
    {
        $quotation = Quotation::find($request->id);
        $quotation->delete();
        return redirect()->back()->with('success', 'Quotation deleted successfully');
    }
}