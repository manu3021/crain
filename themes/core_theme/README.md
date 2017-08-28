
```sh
npm install
```

## Integrating with Drupal

### Required: Component Libraries module

Install and enable the [Component Libraries module](https://www.drupal.org/project/components). No configuration is needed.


### Optional: UI Patterns module

Install and enable the [UI Patterns module](https://www.drupal.org/project/ui_patterns). Some components have a `ui_patterns.yml` definition file, which enables them to be used with UI Patterns.


## Integrating with Pattern Lab

Prerequisites: [npm](https://nodejs.org/) and [Composer](https://getcomposer.org/) installed.

In the core_theme root directory run:

```sh
npm run install-pattern-lab
```

This will download Pattern Lab, make required configuration changes and generate the Pattern Lab website. The command will not do anything if a `pattern-lab` directory already exists.
