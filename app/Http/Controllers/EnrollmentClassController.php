<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\EnrollmentClass;

class EnrollmentClassController extends Controller
{
    /**
     * @var BaseModel The primary model associated with this controller
     */
    public static $model = EnrollmentClass::class;

    /**
     * @var BaseModel The parent model of the model, in the case of a child rest controller
     */
    public static $parentModel = Enrollment::class;

    /**
     * @var null|BaseTransformer The transformer this controller should use, if overriding the model & default
     */
    public static $transformer = null;
}
