class ThemeConfig {
  bool isDarkMode;
  ThemeConfig({this.isDarkMode = false});

  ThemeData get(){
      var theme = this.isDarkMode ? ThemeData.dark() : theme = ThemeData.light()

      return theme.copyWith(
        brightness: Brightness.dark,
        scaffoldBackgroundColor: ThemeConstant.color("scaffoldBackgroundColor", isDarkMode: this.isDarkMode),
        backgroundColor: ThemeConstant.color("scaffoldBackgroundColor", isDarkMode: this.isDarkMode),
        primaryColor: ThemeConstant.color("primaryColor", isDarkMode: this.isDarkMode),
        errorColor: ThemeConstant.color("errorColor", isDarkMode: this.isDarkMode),
        accentColor: ThemeConstant.color("accentColor", isDarkMode: this.isDarkMode),
        canvasColor: ThemeConstant.color("canvasColor", isDarkMode: this.isDarkMode),
        dividerTheme: DividerThemeData(
          color: ThemeConstant.color("dividerColor", isDarkMode: this.isDarkMode),
          thickness: 0.5,
          indent: 8,
          endIndent: 8,
        ),
        iconTheme: IconThemeData(
          color: ThemeConstant.color("iconTheme", isDarkMode: this.isDarkMode),
        ),
        appBarTheme: AppBarTheme(
          brightness: Brightness.dark,
          color: ThemeConstant.color("appBarBackgroundColor", isDarkMode: this.isDarkMode),
          iconTheme: IconThemeData(
            color: ThemeConstant.color("iconTheme", isDarkMode: this.isDarkMode),
          ),
          textTheme: ThemeConstant.textTheme(isDarkMode: this.isDarkMode),
        ),
        buttonTheme: ButtonThemeData(
          hoverColor: ThemeConstant.color("hoverColor", isDarkMode: this.isDarkMode),
          highlightColor: Colors.white.withOpacity(.05),
          splashColor: Colors.transparent,
        ),
        toggleButtonsTheme: ToggleButtonsThemeData(
          hoverColor: ThemeConstant.color("hoverColor", isDarkMode: this.isDarkMode),
          highlightColor: Colors.white.withOpacity(.05),
          splashColor: Colors.transparent,
        ),
        textTheme: ThemeConstant.textTheme(isDarkMode: this.isDarkMode),
      )
      .copyWith(
        pageTransitionsTheme: const PageTransitionsTheme(
          builders: <TargetPlatform, PageTransitionsBuilder>{
            TargetPlatform.android: CupertinoPageTransitionsBuilder(),
          },
        ),
      );
    );
  }
}