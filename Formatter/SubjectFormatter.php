<?php

namespace Jstack\Newyse\Formatter;

class SubjectFormatter
{
    /**
     * @param $subjects
     * @return array
     */
    public function getSubjectQuantities($subjects)
    {
        $quantities = [];
        foreach ($subjects as $subject) {
            $quantities[] = [
                'SubjectId' => $subject->getSubjectId(),
                'Quantity' => $subject->getQuantity(),
            ];
        }

        return $quantities;
    }
}