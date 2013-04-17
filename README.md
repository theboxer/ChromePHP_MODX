# ChromePHP
Install [Chrome Logger](http://www.chromelogger.com "Chrome Logger") extension from [Chrome Store](https://chrome.google.com/webstore/detail/chrome-logger/noaneddfkdjfnfdakjjmocngnfkfehhd "Chrome Store")

Install the ChromePHP package, builded package can be found in [_packages](https://github.com/TheBoxer/ChromePHP_MODX/tree/master/_packages "_packages") folder.

Turn on Chrome Logger (blue icon indicates that Chrome Logger is turned on).

Start logging.

### Examples

#### Log types

`$this->modx->chromephp->log('Test log');`<br />
`$this->modx->chromephp->warn('Test warn');`<br />
`$this->modx->chromephp->error('Test error');`

#### Group log

`$this->modx->chromephp->group('Group');`<br />
`$this->modx->chromephp->log('Log in group', ' Next log in group');`<br />
`$this->modx->chromephp->warn($this->modx->getObject('modResource', 1));`<br /> 
`$this->modx->chromephp->groupEnd();`

#### Collapsed group log

`$this->modx->chromephp->groupCollapsed('Collapsed group');`<br /> 
`$this->modx->chromephp->log('Log in collapsed group');`<br />
`$this->modx->chromephp->groupEnd();`
