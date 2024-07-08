<?php

class InlineMethod
{


    /** Negative Beispiele  */
        public function damageCalculation(int $level): float|int
        {
            return $this->calculateLevelDamage($level) * 10;
        }
        private function calculateLevelDamage(int $level): float|int
        {
            return ($level * 2) / 4 ;
        }





        /** Positive Beispiel */
        public function damageCalculationWithLevel(int $level)
        {
            return (($level * 2) / 4 ) * 10;
        }
}