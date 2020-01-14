<?php
//essa interface deve ser implementada na class que contém 
//a função getTempo restante, que no caso é a class Assinatura
//verificar assinatura.php
    interface Expiravel{
        public function getTempoRestante();
    }