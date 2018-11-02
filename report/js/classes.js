var classes = [
    {
        "name": "App\\Fight\\FightSimulation",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "start",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "duel",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 1,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 9,
        "ccn": 8,
        "ccnMethodMax": 5,
        "externals": [
            "App\\Fight\\AbstractSimulation",
            "App\\Fight\\Type",
            "App\\Fight\\Type"
        ],
        "parents": [
            "App\\Fight\\AbstractSimulation"
        ],
        "lcom": 1,
        "length": 79,
        "vocabulary": 15,
        "volume": 308.64,
        "difficulty": 42.75,
        "effort": 13194.55,
        "level": 0.02,
        "bugs": 0.1,
        "time": 733,
        "intelligentContent": 7.22,
        "number_operators": 22,
        "number_operands": 57,
        "number_operators_unique": 9,
        "number_operands_unique": 6,
        "cloc": 0,
        "loc": 43,
        "lloc": 43,
        "mi": 45.86,
        "mIwoC": 45.86,
        "commentWeight": 0,
        "kanDefect": 0.66,
        "relativeStructuralComplexity": 841,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 841,
        "totalStructuralComplexity": 1682,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 1682,
        "package": "App\\Fight\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 2,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Fight\\AbstractSimulation",
        "interface": false,
        "abstract": true,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getWinner",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "swap",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLuckyNumberForAttacker",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLuckyNumberForDefender",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getRandomSkill",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "obtainAttackSkills",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "obtainDefenceSkills",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setPlayersOrder",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "start",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 10,
        "nbMethods": 10,
        "nbMethodsPrivate": 8,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 19,
        "ccn": 10,
        "ccnMethodMax": 5,
        "externals": [
            "App\\Player\\PlayerInterface",
            "App\\Player\\PlayerInterface",
            "App\\PresentationModel\\PresentationModel",
            "App\\Config\\Settings",
            "App\\Player\\Skills\\AbstractSkill"
        ],
        "parents": [],
        "lcom": 3,
        "length": 101,
        "vocabulary": 26,
        "volume": 474.74,
        "difficulty": 17.21,
        "effort": 8168.4,
        "level": 0.06,
        "bugs": 0.16,
        "time": 454,
        "intelligentContent": 27.59,
        "number_operators": 36,
        "number_operands": 65,
        "number_operators_unique": 9,
        "number_operands_unique": 17,
        "cloc": 19,
        "loc": 92,
        "lloc": 73,
        "mi": 71.63,
        "mIwoC": 39.27,
        "commentWeight": 32.36,
        "kanDefect": 0.57,
        "relativeStructuralComplexity": 64,
        "relativeDataComplexity": 1.06,
        "relativeSystemComplexity": 65.06,
        "totalStructuralComplexity": 640,
        "totalDataComplexity": 10.56,
        "totalSystemComplexity": 650.56,
        "package": "App\\Fight\\",
        "pageRank": 0.03,
        "afferentCoupling": 1,
        "efferentCoupling": 4,
        "instability": 0.8,
        "violations": {}
    },
    {
        "name": "App\\Config\\Settings",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "__construct",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTurnsLimit",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 1,
        "wmc": 2,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [],
        "parents": [],
        "lcom": 1,
        "length": 6,
        "vocabulary": 4,
        "volume": 12,
        "difficulty": 2,
        "effort": 24,
        "level": 0.5,
        "bugs": 0,
        "time": 1,
        "intelligentContent": 6,
        "number_operators": 2,
        "number_operands": 4,
        "number_operators_unique": 2,
        "number_operands_unique": 2,
        "cloc": 10,
        "loc": 23,
        "lloc": 13,
        "mi": 110.65,
        "mIwoC": 68.01,
        "commentWeight": 42.64,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 1.5,
        "relativeSystemComplexity": 1.5,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 3,
        "totalSystemComplexity": 3,
        "package": "App\\Config\\",
        "pageRank": 0.02,
        "afferentCoupling": 1,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "App\\PresentationModel\\AbstractFightView",
        "interface": false,
        "abstract": true,
        "methods": [
            {
                "name": "displayGameHeader",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "displayWelcome",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "displayFightStarted",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "displayRound",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "displayHitInfo",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "displayWinner",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "displaySkillUsage",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 7,
        "nbMethods": 7,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 7,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 7,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [],
        "parents": [],
        "lcom": 7,
        "length": 24,
        "vocabulary": 13,
        "volume": 88.81,
        "difficulty": 0.71,
        "effort": 62.91,
        "level": 1.41,
        "bugs": 0.03,
        "time": 3,
        "intelligentContent": 125.38,
        "number_operators": 7,
        "number_operands": 17,
        "number_operators_unique": 1,
        "number_operands_unique": 12,
        "cloc": 0,
        "loc": 32,
        "lloc": 32,
        "mi": 53.39,
        "mIwoC": 53.39,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 7.57,
        "relativeSystemComplexity": 7.57,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 53,
        "totalSystemComplexity": 53,
        "package": "App\\PresentationModel\\",
        "pageRank": 0.07,
        "afferentCoupling": 2,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "App\\PresentationModel\\AbstractPlayerView",
        "interface": false,
        "abstract": true,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "get",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "display",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "displayStatistics",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "displaySkills",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 5,
        "nbMethods": 5,
        "nbMethodsPrivate": 1,
        "nbMethodsPublic": 4,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 6,
        "ccn": 2,
        "ccnMethodMax": 2,
        "externals": [
            "App\\Player\\PlayerInterface",
            "App\\Player\\PlayerInterface"
        ],
        "parents": [],
        "lcom": 2,
        "length": 33,
        "vocabulary": 14,
        "volume": 125.64,
        "difficulty": 5,
        "effort": 628.21,
        "level": 0.2,
        "bugs": 0.04,
        "time": 35,
        "intelligentContent": 25.13,
        "number_operators": 8,
        "number_operands": 25,
        "number_operators_unique": 4,
        "number_operands_unique": 10,
        "cloc": 14,
        "loc": 41,
        "lloc": 27,
        "mi": 93.14,
        "mIwoC": 53.81,
        "commentWeight": 39.33,
        "kanDefect": 0.38,
        "relativeStructuralComplexity": 81,
        "relativeDataComplexity": 0.36,
        "relativeSystemComplexity": 81.36,
        "totalStructuralComplexity": 405,
        "totalDataComplexity": 1.8,
        "totalSystemComplexity": 406.8,
        "package": "App\\PresentationModel\\",
        "pageRank": 0.05,
        "afferentCoupling": 2,
        "efferentCoupling": 1,
        "instability": 0.33,
        "violations": {}
    },
    {
        "name": "App\\PresentationModel\\FightView",
        "interface": false,
        "abstract": false,
        "methods": [],
        "nbMethodsIncludingGettersSetters": 0,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [
            "App\\PresentationModel\\AbstractFightView"
        ],
        "parents": [
            "App\\PresentationModel\\AbstractFightView"
        ],
        "lcom": 0,
        "length": 0,
        "vocabulary": 0,
        "volume": 0,
        "difficulty": 0,
        "effort": 0,
        "level": 0,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 0,
        "number_operators": 0,
        "number_operands": 0,
        "number_operators_unique": 0,
        "number_operands_unique": 0,
        "cloc": 0,
        "loc": 4,
        "lloc": 4,
        "mi": 171,
        "mIwoC": 171,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 0,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 0,
        "package": "App\\PresentationModel\\",
        "pageRank": 0.02,
        "afferentCoupling": 1,
        "efferentCoupling": 1,
        "instability": 0.5,
        "violations": {}
    },
    {
        "name": "App\\PresentationModel\\PlayerView",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "get",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "display",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 2,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "App\\PresentationModel\\AbstractPlayerView",
            "App\\PresentationModel\\AbstractPlayerView",
            "App\\Player\\PlayerInterface",
            "self"
        ],
        "parents": [
            "App\\PresentationModel\\AbstractPlayerView"
        ],
        "lcom": 2,
        "length": 11,
        "vocabulary": 5,
        "volume": 25.54,
        "difficulty": 1.13,
        "effort": 28.73,
        "level": 0.89,
        "bugs": 0.01,
        "time": 2,
        "intelligentContent": 22.7,
        "number_operators": 2,
        "number_operands": 9,
        "number_operators_unique": 1,
        "number_operands_unique": 4,
        "cloc": 9,
        "loc": 21,
        "lloc": 12,
        "mi": 108.92,
        "mIwoC": 66.47,
        "commentWeight": 42.45,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 16,
        "relativeDataComplexity": 0.6,
        "relativeSystemComplexity": 16.6,
        "totalStructuralComplexity": 32,
        "totalDataComplexity": 1.2,
        "totalSystemComplexity": 33.2,
        "package": "App\\PresentationModel\\",
        "pageRank": 0.02,
        "afferentCoupling": 1,
        "efferentCoupling": 3,
        "instability": 0.75,
        "violations": {}
    },
    {
        "name": "App\\PresentationModel\\PresentationModel",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "getFightView",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getPlayerView",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 2,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "App\\PresentationModel\\AbstractFightView",
            "App\\PresentationModel\\FightView",
            "App\\PresentationModel\\AbstractPlayerView",
            "App\\Player\\PlayerInterface",
            "App\\PresentationModel\\PlayerView"
        ],
        "parents": [],
        "lcom": 2,
        "length": 4,
        "vocabulary": 2,
        "volume": 4,
        "difficulty": 1,
        "effort": 4,
        "level": 1,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 4,
        "number_operators": 2,
        "number_operands": 2,
        "number_operators_unique": 1,
        "number_operands_unique": 1,
        "cloc": 4,
        "loc": 16,
        "lloc": 12,
        "mi": 107.08,
        "mIwoC": 72.11,
        "commentWeight": 34.97,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 1.25,
        "relativeSystemComplexity": 2.25,
        "totalStructuralComplexity": 2,
        "totalDataComplexity": 2.5,
        "totalSystemComplexity": 4.5,
        "package": "App\\PresentationModel\\",
        "pageRank": 0.02,
        "afferentCoupling": 1,
        "efferentCoupling": 5,
        "instability": 0.83,
        "violations": {}
    },
    {
        "name": "App\\Helpers\\Value",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "get",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [],
        "parents": [],
        "lcom": 1,
        "length": 5,
        "vocabulary": 3,
        "volume": 7.92,
        "difficulty": 1,
        "effort": 7.92,
        "level": 1,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 7.92,
        "number_operators": 1,
        "number_operands": 4,
        "number_operators_unique": 1,
        "number_operands_unique": 2,
        "cloc": 10,
        "loc": 18,
        "lloc": 8,
        "mi": 119.61,
        "mIwoC": 73.87,
        "commentWeight": 45.73,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 3,
        "relativeSystemComplexity": 3,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 3,
        "totalSystemComplexity": 3,
        "package": "App\\Player\\Helpers\\",
        "pageRank": 0.03,
        "afferentCoupling": 1,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "App\\Player\\Statistics\\Statistics",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getHealth",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setHealth",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getStrength",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDefence",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSpeed",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLuck",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 7,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 5,
        "nbMethodsSetters": 1,
        "wmc": 7,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "App\\Player\\Statistics\\StatisticsInterface"
        ],
        "parents": [],
        "lcom": 1,
        "length": 34,
        "vocabulary": 8,
        "volume": 102,
        "difficulty": 3.83,
        "effort": 391,
        "level": 0.26,
        "bugs": 0.03,
        "time": 22,
        "intelligentContent": 26.61,
        "number_operators": 11,
        "number_operands": 23,
        "number_operators_unique": 2,
        "number_operands_unique": 6,
        "cloc": 45,
        "loc": 86,
        "lloc": 41,
        "mi": 95.64,
        "mIwoC": 50.62,
        "commentWeight": 45.02,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 5.86,
        "relativeSystemComplexity": 5.86,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 41,
        "totalSystemComplexity": 41,
        "package": "App\\Player\\Statistics\\",
        "pageRank": 0.02,
        "afferentCoupling": 1,
        "efferentCoupling": 1,
        "instability": 0.5,
        "violations": {}
    },
    {
        "name": "App\\Player\\Type",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "human",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "beast",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 2,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [],
        "parents": [],
        "lcom": 2,
        "length": 4,
        "vocabulary": 3,
        "volume": 6.34,
        "difficulty": 0.5,
        "effort": 3.17,
        "level": 2,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 12.68,
        "number_operators": 2,
        "number_operands": 2,
        "number_operators_unique": 1,
        "number_operands_unique": 2,
        "cloc": 10,
        "loc": 22,
        "lloc": 12,
        "mi": 113.94,
        "mIwoC": 70.71,
        "commentWeight": 43.23,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 2,
        "relativeSystemComplexity": 2,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 4,
        "totalSystemComplexity": 4,
        "package": "App\\Player\\",
        "pageRank": 0.02,
        "afferentCoupling": 1,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "App\\Player\\StatisticsFactory",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "get",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getForBeast",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getForHuman",
                "role": null,
                "public": false,
                "private": true,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 3,
        "nbMethodsPrivate": 2,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 6,
        "ccn": 4,
        "ccnMethodMax": 4,
        "externals": [
            "App\\Player\\Statistics\\StatisticsInterface",
            "App\\Player\\Type",
            "self",
            "App\\Player\\Type",
            "self",
            "App\\Player\\Statistics\\Statistics",
            "App\\Player\\Statistics\\StatisticsInterface",
            "App\\Helpers\\Value",
            "App\\Helpers\\Value",
            "App\\Helpers\\Value",
            "App\\Helpers\\Value",
            "App\\Helpers\\Value",
            "App\\Player\\Statistics\\Statistics",
            "App\\Player\\Statistics\\StatisticsInterface",
            "App\\Helpers\\Value",
            "App\\Helpers\\Value",
            "App\\Helpers\\Value",
            "App\\Helpers\\Value",
            "App\\Helpers\\Value",
            "App\\Player\\Statistics\\Statistics"
        ],
        "parents": [],
        "lcom": 3,
        "length": 39,
        "vocabulary": 19,
        "volume": 165.67,
        "difficulty": 4,
        "effort": 662.68,
        "level": 0.25,
        "bugs": 0.06,
        "time": 37,
        "intelligentContent": 41.42,
        "number_operators": 9,
        "number_operands": 30,
        "number_operators_unique": 4,
        "number_operands_unique": 15,
        "cloc": 16,
        "loc": 42,
        "lloc": 26,
        "mi": 93.91,
        "mIwoC": 53.06,
        "commentWeight": 40.85,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 9,
        "relativeDataComplexity": 1.33,
        "relativeSystemComplexity": 10.33,
        "totalStructuralComplexity": 27,
        "totalDataComplexity": 4,
        "totalSystemComplexity": 31,
        "package": "App\\Player\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 5,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Player\\Skills\\MagicShield",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "use",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "App\\Player\\Skills\\AbstractSkill"
        ],
        "parents": [
            "App\\Player\\Skills\\AbstractSkill"
        ],
        "lcom": 1,
        "length": 5,
        "vocabulary": 4,
        "volume": 10,
        "difficulty": 1.5,
        "effort": 15,
        "level": 0.67,
        "bugs": 0,
        "time": 1,
        "intelligentContent": 6.67,
        "number_operators": 2,
        "number_operands": 3,
        "number_operators_unique": 2,
        "number_operands_unique": 2,
        "cloc": 0,
        "loc": 8,
        "lloc": 8,
        "mi": 73.16,
        "mIwoC": 73.16,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 2,
        "relativeSystemComplexity": 2,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 2,
        "totalSystemComplexity": 2,
        "package": "App\\Player\\Skills\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Player\\Skills\\AbstractSkill",
        "interface": false,
        "abstract": true,
        "methods": [
            {
                "name": "__construct",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "use",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getName",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getType",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 4,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 1,
        "nbMethodsSetters": 1,
        "wmc": 4,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "ReflectionClass"
        ],
        "parents": [],
        "lcom": 3,
        "length": 11,
        "vocabulary": 7,
        "volume": 30.88,
        "difficulty": 1.6,
        "effort": 49.41,
        "level": 0.63,
        "bugs": 0.01,
        "time": 3,
        "intelligentContent": 19.3,
        "number_operators": 3,
        "number_operands": 8,
        "number_operators_unique": 2,
        "number_operands_unique": 5,
        "cloc": 18,
        "loc": 38,
        "lloc": 20,
        "mi": 104.82,
        "mIwoC": 61.05,
        "commentWeight": 43.77,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 1,
        "relativeDataComplexity": 1.25,
        "relativeSystemComplexity": 2.25,
        "totalStructuralComplexity": 4,
        "totalDataComplexity": 5,
        "totalSystemComplexity": 9,
        "package": "App\\Player\\Skills\\",
        "pageRank": 0.08,
        "afferentCoupling": 3,
        "efferentCoupling": 1,
        "instability": 0.25,
        "violations": {}
    },
    {
        "name": "App\\Player\\Skills\\SkillFactory",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "register",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "create",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 2,
        "nbMethods": 2,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 2,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 3,
        "ccn": 2,
        "ccnMethodMax": 2,
        "externals": [
            "App\\Player\\Skills\\InvalidSkillException",
            "skillClass"
        ],
        "parents": [],
        "lcom": 1,
        "length": 17,
        "vocabulary": 7,
        "volume": 47.73,
        "difficulty": 4.88,
        "effort": 232.66,
        "level": 0.21,
        "bugs": 0.02,
        "time": 13,
        "intelligentContent": 9.79,
        "number_operators": 4,
        "number_operands": 13,
        "number_operators_unique": 3,
        "number_operands_unique": 4,
        "cloc": 12,
        "loc": 29,
        "lloc": 17,
        "mi": 103.12,
        "mIwoC": 61.14,
        "commentWeight": 41.98,
        "kanDefect": 0.22,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 3.5,
        "relativeSystemComplexity": 3.5,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 7,
        "totalSystemComplexity": 7,
        "package": "App\\Player\\Skills\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 2,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Player\\Skills\\InvalidSkillException",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "__construct",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 1,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Exception"
        ],
        "parents": [
            "Exception"
        ],
        "lcom": 1,
        "length": 4,
        "vocabulary": 3,
        "volume": 6.34,
        "difficulty": 0.75,
        "effort": 4.75,
        "level": 1.33,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 8.45,
        "number_operators": 1,
        "number_operands": 3,
        "number_operators_unique": 1,
        "number_operands_unique": 2,
        "cloc": 4,
        "loc": 13,
        "lloc": 9,
        "mi": 111.3,
        "mIwoC": 73.43,
        "commentWeight": 37.87,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 1,
        "relativeSystemComplexity": 1,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 1,
        "totalSystemComplexity": 1,
        "package": "App\\Player\\Skills\\",
        "pageRank": 0.03,
        "afferentCoupling": 1,
        "efferentCoupling": 1,
        "instability": 0.5,
        "violations": {}
    },
    {
        "name": "App\\Player\\Skills\\RapidStrike",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "use",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "App\\Player\\Skills\\AbstractSkill"
        ],
        "parents": [
            "App\\Player\\Skills\\AbstractSkill"
        ],
        "lcom": 1,
        "length": 5,
        "vocabulary": 4,
        "volume": 10,
        "difficulty": 1.5,
        "effort": 15,
        "level": 0.67,
        "bugs": 0,
        "time": 1,
        "intelligentContent": 6.67,
        "number_operators": 2,
        "number_operands": 3,
        "number_operators_unique": 2,
        "number_operands_unique": 2,
        "cloc": 0,
        "loc": 8,
        "lloc": 8,
        "mi": 73.16,
        "mIwoC": 73.16,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 2,
        "relativeSystemComplexity": 2,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 2,
        "totalSystemComplexity": 2,
        "package": "App\\Player\\Skills\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Player\\Player",
        "interface": false,
        "abstract": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getType",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getName",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getStatistics",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSkills",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "subtractHealth",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 6,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 3,
        "nbMethodsSetters": 0,
        "wmc": 6,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "App\\Player\\PlayerInterface",
            "App\\Player\\Statistics\\StatisticsInterface",
            "App\\Player\\Statistics\\StatisticsInterface"
        ],
        "parents": [],
        "lcom": 1,
        "length": 29,
        "vocabulary": 9,
        "volume": 91.93,
        "difficulty": 5,
        "effort": 459.64,
        "level": 0.2,
        "bugs": 0.03,
        "time": 26,
        "intelligentContent": 18.39,
        "number_operators": 9,
        "number_operands": 20,
        "number_operators_unique": 3,
        "number_operands_unique": 6,
        "cloc": 35,
        "loc": 70,
        "lloc": 35,
        "mi": 96.89,
        "mIwoC": 52.44,
        "commentWeight": 44.46,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 4,
        "relativeDataComplexity": 1.61,
        "relativeSystemComplexity": 5.61,
        "totalStructuralComplexity": 24,
        "totalDataComplexity": 9.67,
        "totalSystemComplexity": 33.67,
        "package": "App\\Player\\",
        "pageRank": 0.02,
        "afferentCoupling": 0,
        "efferentCoupling": 2,
        "instability": 1,
        "violations": {}
    }
]