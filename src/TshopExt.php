<?php

namespace Tuta\TshopExt;

use Illuminate\Support\Facades\Request;
use App\TransactionItem;

class TshopExt {

  public function reportItem($id)
  {
        $report_item = TransactionItem::where('transaction_id', $id)->get();
        return $report_item;
  }

 ?>
