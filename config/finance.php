<?php

use App\Domain\SectionDivider;
use App\GraphQL\Queries\TotalCash;
use App\GraphQL\Queries\TotalIncome;
use App\GraphQL\Queries\TotalSavings;
use App\GraphQL\Queries\TotalPerBrand;
use App\GraphQL\Queries\TotalExpenses;
use App\GraphQL\Queries\TotalInvestment;
use App\GraphQL\Queries\TotalIncomeTrend;
use App\GraphQL\Queries\IncomePerCategory;
use App\GraphQL\Queries\TotalPerBrandTrend;
use App\GraphQL\Queries\TotalExpensesTrend;
use App\GraphQL\Queries\ExpensesPerCategory;
use App\GraphQL\Queries\NumberOfTransactions;
use App\GraphQL\Queries\TotalPerCategoryTrend;
use App\GraphQL\Queries\LowestValueTransaction;
use App\GraphQL\Queries\AverageValueTransaction;
use App\GraphQL\Queries\HighestValueTransaction;
use App\GraphQL\Queries\NumberOfTransactionsPerBrand;
use App\GraphQL\Queries\TransactionsStandardDeviation;
use App\GraphQL\Queries\NumberOfTransactionsPerCategory;
use App\GraphQL\Queries\FinanceVisualizationCirclePackMetric;

return [
    'currency' => 'SRA',
    'sms_templates' => [
        'Purchase of SAR {amount} with {card} at {brand},',
        'Payment of SAR {amount} to {brand} with {card}.',
        '{brand} of SAR {amount} has been credited into ',
        'SAR {amount} has been debited from {account} using {card} at {brand} on {datetime}.',
        '{brand} of SAR {amount} has been credited to your {account} on {datetime}.',
        'Your {brand} of SAR {amount} has been credited to your {account} on {datetime}.',
        'Outward {brand} of SAR {amount} is debited from your {account}. Your {card} as of {datetime}.',
        'An ATM cash {brand} of SRA{amount} has been debited from your {account} on {datetime}.',
        '{brand} PAYMENT for {card} via MOBAPP of SAR {amount} was debited from {account}.'
    ],
    'reports' => [
        (new SectionDivider)->withTitle("🔎 Overview"),
        (new TotalCash)->setWidth('1/3'),
        (new TotalSavings)->setWidth('1/3'),
        (new TotalInvestment)->setWidth('1/3'),
        (new SectionDivider)->withTitle("📊 Analytics"),
        new TotalIncome,
        new TotalExpenses,
        // new IncomePerCategory,
        // new ExpensesPerCategory,
        // new TotalPerBrand,
        new TotalIncomeTrend,
        new TotalExpensesTrend,
        new TotalPerCategoryTrend,
        new TotalPerBrandTrend,
        (new SectionDivider)->withTitle("💰 Facts"),
        (new NumberOfTransactions)->setWidth('1/2'),
        (new NumberOfTransactionsPerCategory)->setWidth('1/2'),
        (new NumberOfTransactionsPerBrand)->setWidth('1/2'),
        (new HighestValueTransaction)->setWidth('1/2'),
        (new LowestValueTransaction)->setWidth('1/2'),
        (new AverageValueTransaction)->setWidth('1/2'),
        (new TransactionsStandardDeviation)->setWidth('full'),
        (new SectionDivider)->withTitle("🧬 Visualization"),
        (new FinanceVisualizationCirclePackMetric)->setWidth('full'),
    ]
];
