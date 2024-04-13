<?php

namespace Modules\Product\Enums;

enum StatusEnum : int {
    case ESTOQUE = 1;
    case REPOSICAO = 2;
    case FALTA = 3;
}