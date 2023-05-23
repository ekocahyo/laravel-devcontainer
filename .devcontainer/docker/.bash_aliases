# set aws profile
function awsp () {
  export AWS_PROFILE=$1
}

function _awsp()
{
  latest="${COMP_WORDS[$COMP_CWORD]}"
  #prev="${COMP_WORDS[$COMP_CWORD - 1]}"
  words=$(rg --no-line-number '\[' ~/.aws/config | grep -v sso-session | cut -c 10- | cut -d "]" -f1)
  COMPREPLY=($(compgen -W "$words" -- $latest))
  return 0
}
complete -F _awsp awsp
alias awswho="aws sts get-caller-identity"
