<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Analytic;

class AnalyticTransformer extends TransformerAbstract
{
    // override
    public function transform(Analytic $analytic)
    {
        return [
            'quiz_id' => $analytic->campaign_id,
            'rating' => $analytic->view
        ];
    }
}
