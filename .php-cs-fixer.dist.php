<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude(['config', 'public', 'var', 'vendor', 'node_modules'])
    ->notPath('src/Kernel.php');

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@PSR12' => true,
        'single_quote' => true,
        'no_unused_imports' => true,
        'strict_comparison' => true,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'no_superfluous_phpdoc_tags' => true,
        'no_trailing_whitespace' => true,
        'declare_strict_types' => true,
        'ordered_imports' => ['sort_algorithm' => 'alpha'],
        'trailing_comma_in_multiline' => ['elements' => ['arrays']],
        'blank_line_after_opening_tag' => true,
        'return_type_declaration' => ['space_before' => 'none'],
        'no_blank_lines_after_phpdoc' => true,
        'blank_line_between_import_groups' => true,
    ])
    ->setFinder($finder);
