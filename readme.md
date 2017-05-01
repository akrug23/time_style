# Time Style

An ExpressionEngine plugin that formats am and pm


## Compatibility

* ExpressionEngine 3.x

## Installation

* Upload the `/system/user/addons/time_style` directory to the `system/user/addons` directory.


## Purpose

Using ExpressionEngine with Solspace Calendar addon date format will not format am/pm with periods. This plugin will replace am/pm with ` a.m.` and ` p.m.` respectively.




## Usage

Replaces every occurance of am, a.m., AM, A.M. with a.m. with a space in front.

Does the same with pm.

Tag is 
```
{exp:time_style parse="inward"}{/exp:time_style}
```

MUST USE `parse="inward"`.


## Change Log

**_May 1st, 2017: 2.0.0_**

* Initial Release
