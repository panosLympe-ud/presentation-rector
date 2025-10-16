<?php

namespace PresentationRector\Legacy;

use PhpParser\Node;
use PhpParser\Node\Identifier;
use PhpParser\Node\Expr\MethodCall;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;

final class CustomRenameRule extends AbstractRector
{
    public function getNodeTypes(): array
    {
        return [MethodCall::class];
    }

    public function refactor(Node $node): ?Node
    {
        if (!$this->isName($node->name, 'oldMethod')) {
            return null;
        }

        $node->name = new Identifier('newMethod');
        return $node;
    }

    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('Rename method oldMethod() to newMethod()', [
            new CodeSample(
                <<<'CODE_SAMPLE'
$object->oldMethod();
CODE_SAMPLE
                ,
                <<<'CODE_SAMPLE'
$object->newMethod();
CODE_SAMPLE
            ),
        ]);
    }
}
