# Rector PHP – Automated Refactoring Examples

## Introduction
Rector is an automated **refactoring tool for PHP**.  
It analyzes your code, detects outdated syntax or deprecated functions, and upgrades it to modern PHP automatically.

This repository contains **10 examples**, starting from simple syntax updates and moving to more advanced refactoring scenarios.

---

## 1. Old Array Syntax
Demonstrates the conversion from the old `array()` syntax to the short array `[]` syntax.  
👉 [View code](src/legacy/OldArraySyntax.php)

---

## 2. Deprecated each() Replacement
Replaces the deprecated `each()` function with a modern `foreach` loop.  
👉 [View code](src/legacy/DeprecatedEach.php)

---

## 3. Null Coalescing Operator
Replaces verbose `isset()` checks or ternary expressions with the null coalescing operator `??`.  
👉 [View code](src/legacy/OldNullCheck.php)

---

## 4. Arrow Functions
Converts traditional anonymous functions into short arrow functions introduced in PHP 7.4.  
👉 [View code](src/legacy/OldClosure.php)

---

## 5. Constructor Property Promotion
Upgrades verbose constructor property assignments to the new PHP 8+ property promotion syntax.  
👉 [View code](src/legacy/OldConstructor.php)

---

## 6. Early Return Refactor
Refactors nested conditionals into early returns for better readability and reduced nesting.  
👉 [View code](src/legacy/OldNestedIf.php)

---

## 7. Dead Code Removal
Detects and removes unreachable or unnecessary code, improving maintainability.  
👉 [View code](src/legacy/OldDeadCode.php)

---

## 8. Type Declaration Upgrade
Adds missing type declarations to methods and properties based on PHPDoc annotations.  
👉 [View code](src/legacy/OldTypeHints.php)

---

## 9. Custom Rector Rule
A demonstration of a **custom Rector rule** that renames an old method to a new one programmatically.  
👉 [View code](src/legacy/CustomRenameRule.php)

---

## 10. Ignoring Rules and Paths
Sometimes you may want to **skip specific files or rules** during refactoring —  
for example, to prevent Rector from changing your demo files or certain legacy areas.

```php
->withSkip([
//         __DIR__ . '/src/legacy/OldArraySyntax.php',
//         __DIR__ . '/src/legacy/DeprecatedEach.php',
//         __DIR__ . '/src/legacy/OldNullCheck.php',
//         __DIR__ . '/src/legacy/OldClosure.php',
//         __DIR__ . '/src/legacy/OldConstructor.php',
//         __DIR__ . '/src/legacy/OldNestedIf.php',
//         __DIR__ . '/src/legacy/OldDeadCode.php',
//         __DIR__ . '/src/legacy/OldTypeHints.php',
//         __DIR__ . '/src/legacy/CustomRenameRule.php',
    ])
```


## Common Rector Commands

Here are the most useful Rector CLI commands you’ll use in practice:

| Command | Description |
|----------|--------------|
| `vendor/bin/rector process src --dry-run` | Shows a preview (diff) of all changes Rector would make, **without modifying files**. |
| `vendor/bin/rector process src` | Runs Rector and **applies** the changes directly to your code. |
| `vendor/bin/rector process src --rule <RuleClass>` | Runs **only one specific rule**, perfect for debugging or focused refactoring. |
| `vendor/bin/rector list-rules` | Lists all available Rector rules with descriptions. |
| `vendor/bin/rector clear-cache` | Clears the Rector cache (useful if you modify config or rules). |
| `vendor/bin/rector --version` | Shows the currently installed Rector version. |

## Conclusion
Rector automates tedious refactoring tasks, making large PHP projects easier to modernize and maintain.  
It ensures code quality, consistency, and compatibility with the latest PHP versions.

P.L.
